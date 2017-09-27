<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

<script>

function calc(x) {
    
    if(document.f1.showdata.value =='0' || document.f1.equalh.value=='=')
    {

        document.f1.showdata.value=x;
        document.f1.equalh.value='';
        document.f1.oneclickop.value='';
    }
    else
    {
    if(document.f1.showdata.value!='' && document.f1.showdata.value!='0')
    {
        document.f1.showdata.value=document.f1.showdata.value+x;
        document.f1.oneclickop.value='';
    }
    
    }
}

function calcop(x) {

    if(x!="=" && document.f1.showdata.value!='' && document.f1.showdata.value!='0' && document.f1.oneclickop.value=='' )
    {
        document.f1.showdata.value=document.f1.showdata.value+x;
        document.f1.equalh.value='';
        document.f1.oneclickop.value='Clicked';
    }
    else if(x=='=' && (document.f1.showdata.value.indexOf("+")>0 || document.f1.showdata.value.indexOf("-")>0 || document.f1.showdata.value.indexOf("*")>0 || document.f1.showdata.value.indexOf("/")>0 ))
    {
        document.f1.equalh.value='=';
        document.f1.showdata.value=eval(document.f1.showdata.value);

    }
}
</script>
</head>
<body>

    

<form name="f1" method="Get">
    <input type="hidden" name="equalh">
    <input type="hidden" name="oneclickop">
<div id="container">
<div class="sub_container">
    <br>
    <input type="text" name="showdata" size="40">
</div>

    <div class="sub_container">

        <input type="button" class="button" style="background-color:#9F263B" name="AC" value="AC" onClick="if(document.f1.showdata.value=='')document.f1.showdata.value=0;else{document.f1.showdata.value='';}">
        <input type="button" class="button" style="background-color:#9F263B" name="CE" value="CE" onclick="if(document.f1.showdata.value!='')document.f1.showdata.value=0;">
        <input type="button" class="button" name="div" value="/" onclick="calcop('/');">
        <input type="button" class="button" name="mul" value="*" onclick="calcop('*');">
    </div>

    <div class="sub_container">

        <input type="button" class="button" name="7" value="7" onclick="calc('7');">
        <input type="button" class="button" name="8" value="8" onclick="calc('8');">
        <input type="button" class="button" name="9" value="9" onclick="calc('9');">
        <input type="button" class="button" name="min" value="-" onclick="calcop('-');">
    </div>


    <div class="sub_container">

        <input type="button" class="button" name="4" value="4" onclick="calc('4');">
        <input type="button" class="button" name="5" value="5" onclick="calc('5');">
        <input type="button" class="button" name="6" value="6" onclick="calc('6');">
        <input type="button" class="button" name="blas" value="+" onclick="calcop('+');">
    </div>

    <div class="sub_container">
        <div class="sub_container_in1">
        <input type="button" class="button" name="1" value="1" onclick="calc('1');">
        <input type="button" class="button" name="2" value="2" onclick="calc('2');">
        <input type="button" class="button" name="3" value="3" onclick="calc('3');">
            <br><br>
            <input type="button" class="button" name="0" style="width: 125px;" value="0" onclick="calc('0');">
            <input type="button" class="button" name="." value="." onclick="calc('.');">
        </div>

        <div class="sub_container_in2" align="left">
            <input type="button" class="button" name="equal" style="height: 110px;" value="="  onclick="calcop('=');">
        </div>
    </div>


</div>


</form>
</body>
</html>
