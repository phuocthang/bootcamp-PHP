<?php 
class Node
{
    /* Node data */
    public $data;
    /* Link to next node */
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}
class LinkList
{
    /* Link to the first node in the list */
    private $firstNode;
    /* Link to the last node in the list */
    private $lastNode;
    /* Total nodes in the list */
    private $count;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        /* If this is the first node inserted in the list
           then set the lastNode pointer to it.
        */
        if($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }
    public function insertLast($data)
    {
        if($this->firstNode != NULL)
        {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }
        else
        {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
$linkedList = new LinkList();
$linkedList->insertFirst(12);
$linkedList->insertFirst(10);
$linkedList->insertFirst(125);
$linkedList->insertFirst(104);
// $linkedList->insertLast(33);
// $linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
// echo $totalNodes;
echo implode ('-' , $linkData);
    
?>