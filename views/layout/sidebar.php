<aside id="lateral">
    <div id="name_user" class="block_aside">
        <?php if (!isset($_SESSION['identity'])) : ?>
            <h4>USER</h4>

        <?php else : ?>
            <h4><?= $_SESSION['identity']->name ?></h4>

        <?php endif; ?>

        <div id="info_enlaces">
            <ul>

                <?php if (isset($_SESSION['usuario'])) : ?>
                    <li><a href="<?= base_url ?>user/tienda">Tienda</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['profesor'])) : ?>
                    <li><a href="<?= base_url ?>user/tienda">Tienda</a></li>
                    <li><a href="<?= base_url ?>user/comprar">Comprar</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['admin'])) : ?>
                    <li><a href="<?= base_url ?>user/registro">Adiministrar</a></li>
                    <li><a href="<?= base_url ?>user/tienda">Tienda</a></li>
                    <li><a href="<?= base_url ?>user/comprar">Comprar</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['admin']) || isset($_SESSION['profesor']) || isset($_SESSION['usuario'])) : ?>
                    <li><a class="btn btn-dark" href="<?= base_url ?>user/logout">SALIR</a></li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</aside>
<!-- CONTENIDO CENTRAL-->
<div id="Contenid_central">