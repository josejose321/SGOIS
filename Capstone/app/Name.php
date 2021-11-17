<?php


class Name {
    private $first;
    private $middle;
    private $last;
    private $extension;



    public function __construct(string $first, string $middle,  string $last, string $extension)
    {
        $this->first = $first;
        $this->middle = $middle;
        $this->last = $last;
        $this->extension = $extension;
    }

    public function getData()
    {
        return $data[] = array(
            "name" => $this->first,
            "middle"=>$this->middle,
            "last" =>$this->last,
            "extension"=> $this->extension
        );
    }
}
?>