<!doctype html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacte - Nou missatge</title>

    <style>{css}</style>
</head>
<body class="bg-light">
<main>
    <div class="container mb-4">
        <h2 class="display-5">RCDE Escola Sant Cugat</h2>
        <h4>Nou missatge</h4>
        <hr class="divider divider-primary my-4 ml-0">

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
