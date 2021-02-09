<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacte - Nou missatge</title>

    <style>
        body{font-size:1.25rem;font-weight:400;line-height:1.5;height:100vh;margin:0;text-align:left;color:#212529}a{text-decoration:none;color:#007cc3;background-color:transparent}h1{font-weight:600}body,h2,h3,h4{font-family:"Circular Std",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}h2,h3,h4{font-weight:500;line-height:1.2;margin-bottom:.5rem}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}h4{font-size:1.5rem}.display-5{font-size:2.5rem;font-weight:300;line-height:1.2}small{font-size:80%;font-weight:400}@media (min-width:1200px){.container{max-width:1140px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:576px){.container{max-width:540px}}.container{width:100%;margin-right:auto;margin-left:auto;padding-right:15px;padding-left:15px}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}hr.divider{max-width:3.25rem;border-width:.2rem;border-color:#007cc3}.mb-4,.my-4{margin-bottom:1.5rem!important}.my-4{margin-top:1.5rem!important}.ml-0{margin-left:0!important}.pt-4{padding-top:1.5rem!important}.px-4{padding-left:1.5rem!important}.px-4{padding-right:1.5rem!important}.pb-2{padding-bottom:.5rem!important}.shadow-sm{-webkit-box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important;box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.rounded{border-radius:.25rem!important}.text-secondary{color:#6c757d!important}.bg-white{background-color:#fff!important}.bg-light{background-color:#f8f9fa}.separator{margin-right:.25rem;margin-left:.25rem}.separator::before{content:'·'}.btn{font-size:1rem;font-weight:400;line-height:1.5;display:inline-block;padding:.375rem .75rem;-moz-user-select:none;-ms-user-select:none;-webkit-user-select:none;user-select:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;text-align:center;vertical-align:middle;color:#212529;border:1px solid transparent;border-radius:.25rem;background-color:transparent}.btn-primary{color:#fff;border-color:#007cc3;background-color:#007cc3}.btn-primary:hover{color:#fff;border-color:#023c8b;background-color:#023c8b}.btn-xl{font-weight:700;padding:1rem 2rem;text-transform:uppercase;border:0;border-radius:10rem}.footnote{line-height:1.2}a.btn svg{position:relative;top:1px;height:1rem;margin-right:.41rem;fill:currentColor}p{white-space:pre-line}
    </style>
</head>
<body class="bg-light">
<main>
    <div class="container mb-4">
        <h2 class="display-5">RCDE Escola Sant Cugat</h2>
        <h4>Nou missatge</h4>
        <hr class="divider my-4 ml-0">

        <div class="shadow-sm rounded bg-white px-4 pt-4 pb-2">
            <div>
                <span>{from}</span>
                <span class="separator"></span>
                <span>{email}</span>
            </div>
            <small class="text-secondary">
                <time datetime="{date}">{date-format}</time>
            </small>
            <p>{message}</p>
        </div>

        <a class="btn btn-primary btn-xl my-4" href="mailto:{from}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M8.309 189.836L184.313 37.851C199.719 24.546 224 35.347 224 56.015v80.053c160.629 1.839 288 34.032 288 186.258 0 61.441-39.581 122.309-83.333 154.132-13.653 9.931-33.111-2.533-28.077-18.631 45.344-145.012-21.507-183.51-176.59-185.742V360c0 20.7-24.3 31.453-39.687 18.164l-176.004-152c-11.071-9.562-11.086-26.753 0-36.328z" />
            </svg>
            Respon
        </a>

        <div class="text-secondary footnote">
            <small>Heu rebut aquest correu electrònic per notificar-vos sobre els nous missatges de contacte
                   procedents de <a href="https://rcdeescolasantcugat.com">rcdeescolasantcugat.com</a>.</small>
            <br>
            <small>Si voleu deixar de rebre aquests missatges, podeu enviar un correu electrònic notificant-ho a
                <a href="mailto:webmaster@rcdeescolasantcugat.com">webmaster@rcdeescolasantcugat.com</a>.
            </small>
        </div>
    </div>
</main>
</body>
</html>
