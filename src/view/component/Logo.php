<?php
function Logo($color)
{
?>
    <style>
        #logo {
            padding: 15px;
            display: flex;
            align-items: center;
            gap: var(--gap-spacing-small);

            >img {
                height: 23px;
            }

            >h1 {
                color: rgb(var(--color-primary01));
                font-size: var(--font-size-title-verysmall);
            }
        }
    </style>
    <a href="#" id="logo" class="<?=$color?>">
        <img src="public/image/Logo.svg" alt="">
        <h1>Homework</h1>
    </a>
<?php
}
?>