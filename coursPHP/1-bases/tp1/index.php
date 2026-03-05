<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>TP 1 : Variables et constantes</title>
        <link href="../../style/style.css" rel="stylesheet">
        <link href="../../style/correction.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <a href="../../index.php" class="banniere">Cours PHP</a>
        <?php require '../../afficheCode.php'; ?>
        <h1>TP 1 : Variables et constantes</h1>
        <h2 class="dif1">Question 1</h2>
        <section class="enonce">Créer 4 variables ayant pour valeur <code>true</code>, <code>42</code>, <code>12.34</code> et <code>'Hello !'</code><br>
        Afficher le type et la valeur de ces variables.</section>
        <?php
        afficheCode(['fichiers' => ['tp1q1.php'], 'execution' => 'tp1q1.php', 'correction' => true, 'commentaires' => 'La fonction <a href="https://www.php.net/manual/fr/function.var-dump.php"><code>var_dump()</code></a> permet d’afficher le type et la valeur d’une variable.']);
        ?>
        <h2 class="dif2">Question 2</h2>
        <section class="enonce">Créer un bloc de code php initialisant une variable et une constante. Ces valeurs sont affichées deux fois à l'aide de la fonction echo comme ceci : La variable vaut 4240 et la constante Bonjour. La première fois en utiliant les guillemets (&nbsp;"&nbsp;) comme délimiteur de chaîne de caractères puis l'appostrophe (&nbsp;'&nbsp;).</section>
        <?php
        afficheCode(['fichiers' => ['tp1q2.php'], 'execution' => 'tp1q2.php', 'correction' => true, 'commentaires' => 'Les instructions <code>$x = "PostgreSQL";</code> et <code>$y = "MySQL";</code> initialisent les variables <code>x</code> et <code>y</code>.<br>L\'instruction <code>$z = &$x;</code> indique que la variable <code>z</code> est un alias pour la variable <code>x</code>. Ces deux variables partagent la même valeur.<br>L\'instruction <code>$x = "PHP 5";</code> modifie la valeur de la variable <code>x</code>. Puisque cette valeur est partagée avec le variable <code>z</code>, elles valent toutes les deux <code>\'PHP 5\'</code>.<br>Enfin, l\'instruction <code>$y = &$x;</code> écrase la valeur précédente de y pour en faire un alias de la variable <code>x</code>. Les variables <code>x</code>, <code>y</code> et <code>z</code> partagent donc la même valeur.']);
        ?>
        <h2 class="dif2">Question 3</h2>
        <section class="enonce">Donner la valeur booléenne des variables <code>$a</code>, <code>$b</code>, <code>$c</code>, <code>$d</code>, <code>$e</code> et <code>$f</code>.</section>
        <?php
        echo '<div>';
        highlight_file('./tp1q3.php');
        echo '</div>';
        afficheCode(['fichiers' => ['tp1q3r.php'], 'execution' => 'tp1q3r.php', 'correction' => true, 'commentaires' => 'La valeur entière <code>0</code> est équivalente à <code>FALSE</code>. Toute autre valeur est équivalente à <code>TRUE</code>.<br>Les chaînes de caractères <code>\'\'</code> (chaîne vide) et <code>\'0\'</code> sont équivalents à FALSE, les autres à <code>TRUE</code>.<br>Pour que <code>$a OR $b</code> vaille <code>TRUE</code>, il faut que soit <code>$a</code>, soit <code>$b</code>, soit les deux vaillent <code>TRUE</code>.<br>Pour que <code>$a AND $c</code> vaille <code>TRUE</code>, il faut que <code>$a</code> et <code>$c</code> vaillent toutes les deux <code>TRUE</code>.<br>Pour que <code>$a XOR $b</code> vaille <code>TRUE</code>, il faut qu’une et une seule des deux variables vaille <code>TRUE</code>.']);
        ?>
        <h2 class="dif3">Question 4</h2>
        <section class="enonce">Donner les valeurs de <code>$x</code>, <code>$y</code>, <code>$z</code> à la fin du script suivant (sans l’exécuter !  :-)).</section>
        <?php
        echo '<div>';
        highlight_file('./tp1q4.php');
        echo '</div>';
        afficheCode(['execution' => 'tp1q4r.php', 'correction' => true, 'commentaires' => 'Les instructions <code>$x = "PostgreSQL";</code> et <code>$y = "MySQL";</code> initialisent les variables <code>x</code> et <code>y</code>.<br>L\'instruction <code>$z = &$x;</code> indique que la variable <code>z</code> est un alias pour la variable <code>x</code>. Ces deux variables partagent la même valeur.<br>L\'instruction <code>$x = "PHP 5";</code> modifie la valeur de la variable <code>x</code>. Puisque cette valeur est partagée avec le variable <code>z</code>, elles valent toutes les deux <code>\'PHP 5\'</code>.<br>Enfin, l\'instruction <code>$y = &$x;</code> écrase la valeur précédente de y pour en faire un alias de la variable <code>x</code>. Les variables <code>x</code>, <code>y</code> et <code>z</code> partagent donc la même valeur.']);
        ?>
        <h2 class="dif3">Question 5</h2>
        <section class="enonce">Donner le type et la valeur de chacune des variables pendant et à la fin du script suivant et vérifier ensuite vos réponses en modifiant le script. Modifier également le script pour ne plus avoir de messages d'avertissement dûs à des transtypages implicites.</section>
        <?php
        echo '<div>';
        highlight_file('tp1q5.php');
        echo '</div>';
        afficheCode(['fichiers' => ['tp1q5c.php'], 'execution' => 'tp1q5c.php', 'correction' => true, 'commentaires' => 'L\'instruction <code>$x = "PHP8";</code> initialise la variable <code>x</code>.<br>L\'instruction <code>$a = &$x;</code> indique que la variable <code>a</code> est un alias pour la variable <code>x</code>. Ces deux variables partagent la même valeur.<br>L\'instruction <code>$y = " 8 eme version de PHP";</code> initialise la variable <code>y</code>.<br>L\'instruction <code>$z = $y * 10;</code> effectue une multiplication. Il faut donc que les opérandes soient des nombres la chaîne de caractère <code>" 8 eme version de PHP"</code> est donc convertie en nombre : 8 puis la multiplication est réalisée.<br>Enfin l\'instruction <code>$x = $y * $y;</code> effectue deux fois cette conversion pour multiplier les deux nombres entre eux.']);
        ?>
    </body>
</html>