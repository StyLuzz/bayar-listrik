<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?= site_url() ?>">
        <img src="<?= base_url('img/Logo_PLN.png') ?>" alt="PLN Logo" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><?= lang('Auth.home')?> <span class="sr-only">(<?= lang('Auth.current')?>)</span></a>
            </li>
        </ul>
    </div>
</nav>
