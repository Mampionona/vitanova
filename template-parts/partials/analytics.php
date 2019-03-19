<script>
    function changeHashOnLoad() {
        window.location.href += '#';
        setTimeout('changeHashAgain()', '10'); 
    }
        
    function changeHashAgain() {
        window.location.href += '1';
    }
        
    var storedHash = window.location.hash;
    window.setInterval(function () {
        if (window.location.hash != storedHash) {
            window.location.hash = storedHash;
        }
    }, 10);
    window.onload = changeHashOnLoad;
</script>
<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-105793371-1', 'auto');
        ga('send', 'pageview');
</script>
