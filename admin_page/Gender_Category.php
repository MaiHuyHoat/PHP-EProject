<?php
function getGender($id)
{
    $gender = "";
    for($i=1;$i<=10;$i++)
    {
        if($id == $i && $i<=5 && $i>=1)
        {
            $gender = "woman";
            break;
        }else if($id == $i && $i<=10 && $i>=6)
        {
            $gender = "man";
            break;
        }
    }
    return $gender;
}

function getCategory($id)
{
    $category = "";
        if($id == 1 || $id == 6)
        {
            $category = "shirt";
        }
        if($id == 2 || $id == 7)
        {
            $category = "polo";
        }
        if($id == 3 || $id == 8)
        {
            $category = "shoes";
        }
        if($id == 4 || $id == 9)
        {
            $category = "shorts";
        }
        if($id == 5 || $id == 10)
        {
            $category = "jeans";
        }
    return $category;
}
?>