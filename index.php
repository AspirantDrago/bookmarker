<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <script type="text/javascript" src="//www.gstatic.com/firebasejs/3.6.8/firebase.js"></script>-->
<!--    <script type="text/javascript" src="/firebase_subscribe.js"></script>-->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        window.OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "214345c2-acf3-484c-a440-bc8d68aa5ae8",
            });
        });
    </script>
</head>
<body>
Моя закладка
<button type="button" id="subscribe">Включить уведомления</button>
</body>
</html>
