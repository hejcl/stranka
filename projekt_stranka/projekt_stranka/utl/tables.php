<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabulky</title>
    <link rel="stylesheet" href="../css/default.css">
    <link rel="stylesheet" href="../css/tables.css">
    <link href="https://db.onlinewebfonts.com/c/d002e7c91b889cc10ce21789cfde95dd?family=Sequel+100+Wide+95" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
</head>
<body>

<!-- Hlavička stránky -->
<header>
    <div class="header-left">
        <img src="https://yt3.googleusercontent.com/M23KtQHe5iA0NHAdlFAUYlKqcKS2wl4Mxz0z7O3pqMQ4KkNeUUyVHlebVcBgcmYp57CHRkfr=s160-c-k-c0x00ffffff-no-rj" alt="Logo" class="header-logo">
        <span class="header-text">Football Themes</span> </div>
    <h1>TABULKY TOP 5 LIG</h1>
    <div class="login-icon">
        <a href="login.php" title="Přihlášení">
            <i class="bi bi-person-fill"></i>
        </a>
    </div>
    <div>
        <div class="search-icon">
            <i class="bi bi-search" style="font-size: 1.5rem; cursor: pointer;" onclick="toggleSearch()"></i>
        </div>
    </div>
    <div class="search-bar" style="display: none;">
        <label for="search-input"></label><input type="text" id="search-input" placeholder="Hledat..." oninput="highlightText()">
    </div>

</header>

<?php
include_once 'header.php';
?>
<!-- Hlavní obsah -->
<main>
    <div class="football-field">



        <table class="league-table-premier-league">
            <h2>PREMIER LEAGUE</h2>
            <thead>
            <tr>
                <th>Pořadí</th><th>Klub</th><th>Zápasy</th><th>Výhry</th><th>Remízy</th><th>Prohry</th><th>Skóre</th><th>Body</th>
            </tr>
            </thead>
            <tbody>
            <!--  -->
            <tr><td>1</td><td>Liverpool</td><td>11</td><td>9</td><td>1</td><td>1</td><td>21:6</td><td>28</td></tr>
            <tr><td>2</td><td>Manchester City</td><td>12</td><td>7</td><td>2</td><td>3</td><td>22:16</td><td>23</td></tr>
            <tr><td>3</td><td>Chelsea</td><td>12</td><td>6</td><td>4</td><td>2</td><td>23:14</td><td>22</td></tr>
            <tr><td>4</td><td>Arsenal</td><td>12</td><td>6</td><td>4</td><td>2</td><td>21:12</td><td>22</td></tr>
            <tr><td>5</td><td>Brighton</td><td>12</td><td>6</td><td>4</td><td>2</td><td>21:16</td><td>22</td></tr>
            <tr><td>6</td><td>Tottenham</td><td>12</td><td>6</td><td>1</td><td>5</td><td>26:13</td><td>19</td></tr>
            <tr><td>7</td><td>Nottingham</td><td>12</td><td>5</td><td>4</td><td>3</td><td>15:13</td><td>19</td></tr>
            <tr><td>8</td><td>Aston Villa</td><td>12</td><td>5</td><td>4</td><td>3</td><td>19:19</td><td>19</td></tr>
            <tr><td>9</td><td>Newcastle</td><td>11</td><td>5</td><td>3</td><td>3</td><td>13:11</td><td>18</td></tr>
            <tr><td>10</td><td>Fulham</td><td>12</td><td>5</td><td>3</td><td>4</td><td>17:17</td><td>18</td></tr>
            <tr><td>11</td><td>Brentford</td><td>12</td><td>5</td><td>2</td><td>5</td><td>22:22</td><td>17</td></tr>
            <tr><td>12</td><td>Manchester United</td><td>4</td><td>3</td><td>4</td><td>3</td><td>12:12</td><td>15</td></tr>
            <tr><td>13</td><td>Bournemouth</td><td>12</td><td>4</td><td>3</td><td>5</td><td>16:17</td><td>15</td></tr>
            <tr><td>14</td><td>West Ham</td><td>11</td><td>3</td><td>3</td><td>5</td><td>13:19</td><td>12</td></tr>
            <tr><td>15</td><td>Everton</td><td>12</td><td>2</td><td>5</td><td>5</td><td>10:17</td><td>11</td></tr>
            <tr><td>16</td><td>Leicester City</td><td>12</td><td>2</td><td>4</td><td>6</td><td>15:23</td><td>10</td></tr>
            <tr><td>17</td><td>Wolves</td><td>12</td><td>2</td><td>3</td><td>7</td><td>20:28</td><td>9</td></tr>
            <tr><td>18</td><td>Crystal Palace</td><td>12</td><td>1</td><td>5</td><td>6</td><td>10:17</td><td>8</td></tr>
            <tr><td>19</td><td>Ipswich</td><td>11</td><td>1</td><td>5</td><td>5</td><td>12:22</td><td>8</td></tr>
            <tr><td>20</td><td>Southampton</td><td>11</td><td>1</td><td>1</td><td>9</td><td>7:21</td><td>4</td></tr>
            </tbody>
        </table>


        <table class="league-table-la-liga">
            <h2>LA LIGA</h2>
            <thead>
            <tr>
                <th>Pořadí</th><th>Klub</th><th>Zápasy</th><th>Výhry</th><th>Remízy</th><th>Prohry</th><th>Skóre</th><th>Body</th>
            </tr>
            </thead>
            <tbody>
            <!--  -->
            <tr><td>1</td><td>Barcelona</td><td>13</td><td>11</td><td>0</td><td>2</td><td>40:12</td><td>33</td></tr>
            <tr><td>2</td><td>Atletico Madrid</td><td>14</td><td>8</td><td>5</td><td>1</td><td>21:8</td><td>29</td></tr>
            <tr><td>3</td><td>Real Madrid</td><td>12</td><td>8</td><td>6</td><td>1</td><td>25:11</td><td>27</td></tr>
            <tr><td>4</td><td>Villareal</td><td>12</td><td>7</td><td>3</td><td>2</td><td>23:19</td><td>24</td></tr>
            <tr><td>5</td><td>Girona</td><td>14</td><td>6</td><td>3</td><td>5</td><td>20:18</td><td>21</td></tr>
            <tr><td>6</td><td>Mallorca</td><td>14</td><td>6</td><td>3</td><td>5</td><td>13:12</td><td>21</td></tr>
            <tr><td>7</td><td>Osasuna</td><td>13</td><td>6</td><td>3</td><td>4</td><td>17:20</td><td>21</td></tr>
            <tr><td>8</td><td>Bilbao</td><td>13</td><td>5</td><td>5</td><td>3</td><td>19:13</td><td>20</td></tr>
            <tr><td>9</td><td>Betis</td><td>14</td><td>5</td><td>5</td><td>4</td><td>13:11</td><td>20</td></tr>
            <tr><td>10</td><td>Real Sociedad</td><td>13</td><td>5</td><td>3</td><td>5</td><td>11:10</td><td>18</td></tr>
            <tr><td>11</td><td>Celta Vigo</td><td>13</td><td>5</td><td>2</td><td>6</td><td>20:22</td><td>17</td></tr>
            <tr><td>12</td><td>Vallecano</td><td>12</td><td>4</td><td>4</td><td>4</td><td>13:13</td><td>16</td></tr>
            <tr><td>13</td><td>Sevilla</td><td>13</td><td>4</td><td>3</td><td>6</td><td>16:17</td><td>15</td></tr>
            <tr><td>14</td><td>Leganes</td><td>13</td><td>3</td><td>5</td><td>5</td><td>13:19</td><td>14</td></tr>
            <tr><td>15</td><td>Getafe</td><td>14</td><td>2</td><td>7</td><td>5</td><td>10:11</td><td>13</td></tr>
            <tr><td>16</td><td>Alaves</td><td>14</td><td>4</td><td>1</td><td>9</td><td>15:24</td><td>13</td></tr>
            <tr><td>17</td><td>Las Palmas</td><td>14</td><td>3</td><td>3</td><td>8</td><td>18:25</td><td>12</td></tr>
            <tr><td>18</td><td>Valencia</td><td>12</td><td>2</td><td>4</td><td>6</td><td>12:19</td><td>10</td></tr>
            <tr><td>19</td><td>Espanyol</td><td>13</td><td>3</td><td>1</td><td>9</td><td>12:26</td><td>10</td></tr>
            <tr><td>20</td><td>Valladolid</td><td>14</td><td>2</td><td>3</td><td>9</td><td>10:27</td><td>9</td></tr>
            </tbody>
        </table>

        <table class="league-table-serie-a">
            <h2>SERIE A</h2>
            <thead>
            <tr>
                <th>Pořadí</th><th>Klub</th><th>Zápasy</th><th>Výhry</th><th>Remízy</th><th>Prohry</th><th>Skóre</th><th>Body</th>
            </tr>
            </thead>
            <tbody>
            <!--  -->
            <tr><td>1</td><td>Atalanta BC</td><td>13</td><td>9</td><td>1</td><td>3</td><td>32:15</td><td>28</td></tr>
            <tr><td>2</td><td>Inter</td><td>13</td><td>8</td><td>4</td><td>1</td><td>31:14</td><td>28</td></tr>
            <tr><td>3</td><td>Napoli</td><td>12</td><td>8</td><td>2</td><td>2</td><td>19:9</td><td>26</td></tr>
            <tr><td>4</td><td>Fiorentina</td><td>12</td><td>7</td><td>4</td><td>1</td><td>25:10</td><td>25</td></tr>
            <tr><td>5</td><td>Juventus</td><td>13</td><td>6</td><td>7</td><td>0</td><td>21:7</td><td>25</td></tr>
            <tr><td>6</td><td>Lazio</td><td>12</td><td>8</td><td>1</td><td>3</td><td>25:14</td><td>25</td></tr>
            <tr><td>7</td><td>AC Milan</td><td>12</td><td>5</td><td>4</td><td>3</td><td>20:14</td><td>19</td></tr>
            <tr><td>8</td><td>Bologna</td><td>11</td><td>4</td><td>6</td><td>1</td><td>15:13</td><td>18</td></tr>
            <tr><td>9</td><td>Udinese Calcio</td><td>12</td><td>5</td><td>1</td><td>6</td><td>15:18</td><td>16</td></tr>
            <tr><td>10</td><td>FC Empoli</td><td>12</td><td>3</td><td>6</td><td>3</td><td>9:10</td><td>15</td></tr>
            <tr><td>11</td><td>Torino</td><td>12</td><td>4</td><td>2</td><td>6</td><td>15:18</td><td>14</td></tr>
            <tr><td>12</td><td>AS Roma</td><td>12</td><td>3</td><td>4</td><td>5</td><td>14:17</td><td>13</td></tr>
            <tr><td>13</td><td>Parma</td><td>13</td><td>2</td><td>6</td><td>5</td><td>16:19</td><td>12</td></tr>
            <tr><td>14</td><td>Hellas Verona</td><td>13</td><td>4</td><td>0</td><td>9</td><td>17:32</td><td>12</td></tr>
            <tr><td>15</td><td>Como</td><td>12</td><td>2</td><td>4</td><td>6</td><td>13:23</td><td>10</td></tr>
            <tr><td>16</td><td>Cagliari Calcio</td><td>12</td><td>2</td><td>4</td><td>6</td><td>12:22</td><td>10</td></tr>
            <tr><td>17</td><td>Genoa</td><td>12</td><td>2</td><td>4</td><td>6</td><td>9:22</td><td>10</td></tr>
            <tr><td>18</td><td>Lecce</td><td>12</td><td>2</td><td>3</td><td>7</td><td>5:21</td><td>9</td></tr>
            <tr><td>19</td><td>Monza</td><td>12</td><td>1</td><td>5</td><td>6</td><td>10:15</td><td>8</td></tr>
            <tr><td>20</td><td>Venezia</td><td>12</td><td>2</td><td>2</td><td>8</td><td>11:21</td><td>8</td></tr>
            </tbody>
        </table>


        <table class="league-table-bundesliga">
            <h2>BUNDESLIGA</h2>
            <thead>
            <tr>
                <th>Pořadí</th><th>Klub</th><th>Zápasy</th><th>Výhry</th><th>Remízy</th><th>Prohry</th><th>Skóre</th><th>Body</th>
            </tr>
            </thead>
            <tbody>
            <!--  -->
            <tr><td>1</td><td>Bayern</td><td>11</td><td>9</td><td>2</td><td>0</td><td>36:7</td><td>29</td></tr>
            <tr><td>2</td><td>Frankfurt</td><td>11</td><td>7</td><td>2</td><td>2</td><td>27:16</td><td>23</td></tr>
            <tr><td>3</td><td>RB Leipzig</td><td>11</td><td>6</td><td>3</td><td>2</td><td>19:9</td><td>21</td></tr>
            <tr><td>4</td><td>Leverkusen</td><td>11</td><td>5</td><td>5</td><td>1</td><td>26:18</td><td>20</td></tr>
            <tr><td>5</td><td>Dortmund</td><td>11</td><td>6</td><td>1</td><td>4</td><td>22:18</td><td>19</td></tr>
            <tr><td>6</td><td>Freiburg</td><td>11</td><td>5</td><td>2</td><td>4</td><td>13:15</td><td>17</td></tr>
            <tr><td>7</td><td>Stuttgart</td><td>11</td><td>4</td><td>4</td><td>3</td><td>21:19</td><td>16</td></tr>
            <tr><td>8</td><td>Union Berlin</td><td>11</td><td>4</td><td>4</td><td>3</td><td>9:9</td><td>16</td></tr>
            <tr><td>9</td><td>Wolfsburg</td><td>11</td><td>4</td><td>3</td><td>4</td><td>20:18</td><td>15</td></tr>
            <tr><td>10</td><td>Werder Bremen</td><td>11</td><td>4</td><td>3</td><td>4</td><td>17:22</td><td>15</td></tr>
            <tr><td>11</td><td>Bor.M´gladbach</td><td>10</td><td>4</td><td>2</td><td>4</td><td>15:14</td><td>14</td></tr>
            <tr><td>12</td><td>1.FSV Mainz 05</td><td>10</td><td>3</td><td>4</td><td>3</td><td>15:14</td><td>13</td></tr>
            <tr><td>13</td><td>TSG Hoffenheim</td><td>11</td><td>3</td><td>3</td><td>5</td><td>17:22</td><td>12</td></tr>
            <tr><td>14</td><td>FC Ausburg</td><td>11</td><td>3</td><td>3</td><td>5</td><td>13:23</td><td>12</td></tr>
            <tr><td>15</td><td>Heidenheim</td><td>11</td><td>3</td><td>1</td><td>7</td><td>15:20</td><td>10</td></tr>
            <tr><td>16</td><td>FC St. Pauli</td><td>10</td><td>2</td><td>2</td><td>6</td><td>7:12</td><td>8</td></tr>
            <tr><td>17</td><td>Holstein Kiel</td><td>10</td><td>1</td><td>2</td><td>7</td><td>12:25</td><td>5</td></tr>
            <tr><td>18</td><td>VfL Bochum</td><td>11</td><td>0</td><td>2</td><td>9</td><td>10:32</td><td>2</td></tr>

            </tbody>
        </table>


        <table class="league-table-ligue-1">
            <h2>LIGUE 1</h2>
            <thead>
            <tr>
                <th>Pořadí</th>
                <th>Klub</th>
                <th>Zápasy</th>
                <th>Výhry</th>
                <th>Remízy</th>
                <th>Prohry</th>
                <th>Skóre</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>1</td><td>Paris Saint-Germain</td><td>12</td><td>10</td><td>2</td><td>0</td><td>36:10</td><td>32</td></tr>
            <tr><td>2</td><td>AS Monaco</td><td>12</td><td>8</td><td>2</td><td>2</td><td>21:10</td><td>26</td></tr>
            <tr><td>3</td><td>Olympique Marseille</td><td>12</td><td>7</td><td>2</td><td>3</td><td>27:16</td><td>23</td></tr>
            <tr><td>4</td><td>LOSC Lille</td><td>11</td><td>5</td><td>4</td><td>2</td><td>18:11</td><td>19</td></tr>
            <tr><td>5</td><td>Olympique Lyon</td><td>12</td><td>5</td><td>4</td><td>3</td><td>19:16</td><td>19</td></tr>
            <tr><td>6</td><td>Stade Reims</td><td>12</td><td>5</td><td>3</td><td>4</td><td>20:16</td><td>18</td></tr>
            <tr><td>7</td><td>OGC Nice</td><td>11</td><td>4</td><td>5</td><td>2</td><td>21:11</td><td>17</td></tr>
            <tr><td>8</td><td>RC Lens</td><td>12</td><td>4</td><td>5</td><td>3</td><td>13:12</td><td>17</td></tr>
            <tr><td>9</td><td>AJ Auxerre</td><td>11</td><td>5</td><td>1</td><td>5</td><td>20:19</td><td>16</td></tr>
            <tr><td>10</td><td>FC Toulouse</td><td>12</td><td>4</td><td>3</td><td>5</td><td>13:14</td><td>15</td></tr>
            <tr><td>11</td><td>RC Strasbourg Alsace</td><td>11</td><td>3</td><td>4</td><td>4</td><td>20:22</td><td>13</td></tr>
            <tr><td>12</td><td>Stade Brestois 29</td><td>12</td><td>4</td><td>1</td><td>7</td><td>16:22</td><td>13</td></tr>
            <tr><td>13</td><td>AS Saint-Étienne</td><td>12</td><td>4</td><td>1</td><td>7</td><td>11:25</td><td>13</td></tr>
            <tr><td>14</td><td>Stade Rennais FC</td><td>11</td><td>3</td><td>2</td><td>6</td><td>13:18</td><td>11</td></tr>
            <tr><td>15</td><td>FC Nantes</td><td>11</td><td>2</td><td>4</td><td>5</td><td>14:17</td><td>10</td></tr>
            <tr><td>16</td><td>Angers SCO</td><td>11</td><td>2</td><td>4</td><td>5</td><td>13:20</td><td>10</td></tr>
            <tr><td>17</td><td>Le Havre AC</td><td>11</td><td>3</td><td>0</td><td>8</td><td>8:23</td><td>9</td></tr>
            <tr><td>18</td><td>Montpellier HSC</td><td>12</td><td>2</td><td>1</td><td>9</td><td>11:32</td><td>7</td></tr>
            </tbody>
        </table>


    </div>
    <script src="../js/script.js"></script>
</main>



</body>
<?php
include_once 'footer.php';
?>
</html>
