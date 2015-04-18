// JavaScript Document
var count = 0;
var name1;
var name2;

function Start()
{
    count = 1;
    document.getElementById("b1").innerHTML="";
    document.getElementById("b2").innerHTML="";
    document.getElementById("b3").innerHTML="";
    document.getElementById("b4").innerHTML="";
    document.getElementById("b5").innerHTML="";
    document.getElementById("b6").innerHTML="";
    document.getElementById("b7").innerHTML="";
    document.getElementById("b8").innerHTML="";
    document.getElementById("b9").innerHTML="";
   
    name1 = document.getElementById("name1").value;
    name2 = document.getElementById("name2").value;
   
    document.getElementById("starttext").innerHTML="Restart";
    DisplayPlayer();
}

function Check()
{
    var b1 = document.getElementById("b1").innerHTML;
    var b2 = document.getElementById("b2").innerHTML;
    var b3 = document.getElementById("b3").innerHTML;
    var b4 = document.getElementById("b4").innerHTML;
    var b5 = document.getElementById("b5").innerHTML;
    var b6 = document.getElementById("b6").innerHTML;
    var b7 = document.getElementById("b7").innerHTML;
    var b8 = document.getElementById("b8").innerHTML;
    var b9 = document.getElementById("b9").innerHTML;
   
    if ((b1 == b2) && (b2 == b3) && (b1 == 'X')
        ||(b4 == b5) && (b5 == b6) && (b4 == 'X')
        ||(b7 == b8) && (b8 == b9) && (b7 == 'X')
        ||(b1 == b4) && (b4 == b7) && (b1 == 'X')
        ||(b2 == b5) && (b5 == b8) && (b2 == 'X')
        ||(b3 == b6) && (b6 == b9) && (b3 == 'X')
        ||(b1 == b5) && (b5 == b9) && (b1 == 'X')
        ||(b3 == b5) && (b5 == b7) && (b3 == 'X'))
        {
            count = 0;
            document.getElementById("caption").innerHTML=name1+" wins";
        }
    else if ((b1 == b2) && (b2 == b3) && (b1 == 'O')
        ||(b4 == b5) && (b5 == b6) && (b4 == 'O')
        ||(b7 == b8) && (b8 == b9) && (b7 == 'O')
        ||(b1 == b4) && (b4 == b7) && (b1 == 'O')
        ||(b2 == b5) && (b5 == b8) && (b2 == 'O')
        ||(b3 == b6) && (b6 == b9) && (b3 == 'O')
        ||(b1 == b5) && (b5 == b9) && (b1 == 'O')
        ||(b3 == b5) && (b5 == b7) && (b3 == 'O'))
        {
            count = 0;
            document.getElementById("caption").innerHTML=name2+" wins";
        }
    else if (count == 10)
    {
        count = 0;
                    document.getElementById("caption").innerHTML="Draw!";
    }
}

function DisplayPlayer()
{               
    if (count != 0)
    {
        if ((count == 1) || (count == 3) || (count == 5) || (count == 7) || (count == 9))
            document.getElementById("caption").innerHTML=name1+"'s turn";
        else
            document.getElementById("caption").innerHTML=name2+"'s turn";
    }
}

function Play(id)
{   
    var x = document.getElementById(id).innerHTML;
    if ((count != 0) && (x != 'X') && (x != 'O'))
    {
        if ((count == 1) || (count == 3) || (count == 5) || (count == 7) || (count == 9))
            document.getElementById(id).innerHTML='X';
        else
            document.getElementById(id).innerHTML='O';

        count++;
        DisplayPlayer();
        Check();
    }
}