<?php


namespace App\classes;


class StudentInfo
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $result;
    protected $imageFile;
    protected $imageName;
    protected $imageDirectory;
    public function __construct($post=null, $file=null)
                      //by default null bole disi
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->value = $post;
        }
        if ($file){
            $this->imageFile = $file['image'];
        }
    }

    public function index()
    {
        $this->imageName = $_FILES['image']['name'];
        echo $this->imageName;
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        //fuction needs to be called, cannot work alone on its own.
        //our files and functions are getting called from the action.php file
        // so everything and every path is with respect to action.php
        move_uploaded_file($_FILES['image']['tmp_name'],$this->imageDirectory);
        echo 'success!';
    }
}