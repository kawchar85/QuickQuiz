<?php
    
    session_start();
    
    $orderBy = array('Author', 'Name', 'Course', 'Time');

    $order = 'ID';
    $type = 'DESC'; //ASC|DESC
    
    if(!isset($_SESSION['cntA']))
    {
        $_SESSION['cntA']='0';
    }
    if(!isset($_SESSION['cntFN']))
    {
        $_SESSION['cntFN']='0';
    }
    if(!isset($_SESSION['cntC']))
    {
        $_SESSION['cntC']='0';
    }
    if(!isset($_SESSION['cntT']))
    {
        $_SESSION['cntT']='0';
    }

    if(isset($_GET['sort']) && isset($_GET['cnt']) && in_array($_GET['sort'], $orderBy))
    {
        $order = $_GET['sort'];
        if($order == 'Author')
        {
            if($_SESSION['cntA']=='0')
            {
                $type = 'ASC';
                $_SESSION['cntA'] = '1';
            }
            else
            {
                $type = 'DESC';
                $_SESSION['cntA'] = '0';
            }
        }
        else if($order == 'Name')
        {
            if($_SESSION['cntFN']=='0')
            {
                $type = 'ASC';
                $_SESSION['cntFN'] = '1';
            }
            else
            {
                $type = 'DESC';
                $_SESSION['cntFN'] = '0';
            }
        }
        else if($order == 'Course')
        {
            if($_SESSION['cntC']=='0')
            {
                $type = 'ASC';
                $_SESSION['cntC'] = '1';
            }
            else
            {
                $type = 'DESC';
                $_SESSION['cntC'] = '0';
            }
        }
        else if($order == 'Time')
        {
            if($_SESSION['cntT']=='0')
            {
                $type = 'ASC';
                $_SESSION['cntT'] = '1';
            }
            else
            {
                $type = 'DESC';
                $_SESSION['cntT'] = '0';
            }
        }
    }

    $sort = 'ORDER BY '.$order.' '.$type;
    $_SESSION['sort']=$sort;
    
    echo $_SESSION['sort']."<br>";
    echo $_SESSION['cntA']."<br>";
    echo $_SESSION['cntFN']."<br>";
    echo $_SESSION['cntC']."<br>";
    
    header("location: notes.php");
?>
