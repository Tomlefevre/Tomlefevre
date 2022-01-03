{extends file='layout.tpl'}
{block name=title}Profil{/block}
{block name=body}
<div id='main'>

    <h1>Profil</h1>

    <label><b>Nom</b></label><br />
    <input type="nom" placeholder="Nom" name="nom" value={$smarty.session.user.nom}><br />
    <span>{$messages['nom']|escape|default:""}</span><br />

    <label><b>Email</b></label><br />
    <input type="email" placeholder="email" name="email" value={$info['email']}><br />
    <span>{$messages['email']|escape|default:""}</span><br />

    <label><b>Pays</b></label><br />
    <input type="pays" placeholder="pays" name="pays" value={$info['pays']}><br />
    <span>{$messages['pays']|escape|default:""}</span><br />

    <label><b>Ville</b></label><br />
    <input type="ville" placeholder="ville" name="ville" value={$info['ville']}><br />
    <span>{$messages['ville']|escape|default:""}</span><br />


</div>
{/block}