<html>
    <body>
        <h1>Hello, Qiscuss Agent</h1>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var s,t; s = document.createElement('script'); s.type = 'text/javascript';
                s.src = 'https://s3-ap-southeast-1.amazonaws.com/qiscus-sdk/public/qismo/qismo-v4.js'; s.async = true;
                s.onload = s.onreadystatechange = function() { new Qismo('emou-35yq8omcioqw3nc0', { 
                                options: { 
                                    channel_id: 5620,
                                }
                            }); }
                t = document.getElementsByTagName('script')[0]; t.parentNode.insertBefore(s, t);
            });
        </script>
    </body>
</html>