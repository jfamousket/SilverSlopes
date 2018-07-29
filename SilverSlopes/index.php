<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Silverslopes</title>
        <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114313567-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114313567-2');
</script>

</head>
<body>
<script>
var
en = /^en/i, fr = /^fr/i, lang = navigator.language;
var test_en = en.test(lang), test_fr = fr.test(lang);
if(test_en || test_fr){
    if(test_en){
        window.location.assign("en/index.html");
    }
    else if(test_fr){
        window.location.assign("fr/index.html");
    }else{
       window.location.assign("en/index.html");
    }

}else{
    document.write("Sorry: Your Language is not supported");
}
console.log(lang);
</script>
</body>
</html>
