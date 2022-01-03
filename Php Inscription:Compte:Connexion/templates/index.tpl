{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
    {if isset($user)} <!--Verification si user est déclarée et est différente de null -->
        <h1>Home</h1>
        <p>Bienvenue ! {$smarty.session.user.nom}</p>
        <div>
            <a href='profil'>profil</a>
            <a href='logout'>Me déconnecter</a>
        </div>
    {else}
        <h1>Home</h1>
        <p>Contenu du site </p>
        <div>
            <a href='register'>inscription</a>
            <a href='login'>connexion</a>
        </div>
    {/if}
</div>
{/block}