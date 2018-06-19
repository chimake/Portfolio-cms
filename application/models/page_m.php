<?php
class Page_m extends MY_Model
{
    protected $_table_name = 'pages';
    protected $_order_by = 'order';
    public $rules = array(
        'parent_id' => array(
            'field' => 'parent_id',
            'label' => 'Parent',
            'rules' => 'trim|intval'
        ),
        'title' => array(
            'field' => 'title',
            'label' => 'Title',
            'rules' => 'trim|required|max_length[100]|xss_clean'
        ),
        'slug' => array(
            'field' => 'slug',
            'label' => 'Slug',
            'rules' => 'trim|required|max_length[100]|url_title|callback__unique_slug|xss_clean'
        ),
        'body' => array(
            'field' => 'body',
            'label' => 'Body',
            'rules' => 'trim|required'
        )
    );

    public function get_new ()
    {
        $page = new stdClass();
        $page->title = '';
        $page->slug = '';
        $page->body = '';
        $page->parent_id = 0;
        return $page;
    }

    public function delete ($id)
    {
        // Delete a page
        parent::delete($id);

        // Reset parent ID for its children
        $this->db->set(array(
            'parent_id' => 0
        ))->where('parent_id', $id)->update($this->_table_name);
    }

    public function save_order ($pages)
    {
        if (count($pages)) {
            dump($pages);
            foreach ($pages as $order => $page) {
                if (isset($page['id']) && $page['id'] != '') {
                    $data = array('parent_id' => (int) $page['parent_id'], 'order' => $order);
                    $this->db->set($data)->where($this->_primary_key, $page['id'])->update($this->_table_name);
                }else{
                    $data = array('parent_id' => (int) $page['parent_id'], 'order' => $order);
                    $this->db->set($data)->where($this->_primary_key, $page['id'])->update($this->_table_name);
                }
            }
        }
    }

    public function get_nested ()
    {
        $pages = $this->db->get('pages')->result_array();

        $array = array();
        foreach ($pages as $page) {
            if (! $page['parent_id']) {
                $array[$page['id']] = $page;
            }
            else {
                $array[$page['parent_id']]['children'][] = $page;
            }
        }
        return $array;
    }

    public function get_with_parent ($id = NULL, $single = FALSE)
    {
        $this->db->select('pages.*, p.slug as parent_slug, p.title as parent_title');
        $this->db->join('pages as p', 'pages.parent_id=p.id', 'left');
        return parent::get($id, $single);
    }

    public function get_no_parents ()
    {
        // Fetch pages without parents
        $this->db->select('id, title');
        $this->db->where('parent_id', 0);
        $pages = parent::get();

        // Return key => value pair array
        $array = array(
            0 => 'No parent'
        );
        if (count($pages)) {
            foreach ($pages as $page) {
                $array[$page->id] = $page->title;
            }
        }

        return $array;
    }
}