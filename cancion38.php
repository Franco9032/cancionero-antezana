<html>
<head>
  <style>
    /* Estilos para la sección de letra y acordes */
    .letra-acordes {
      float: left;
      width: 66%;
      padding-left: 2%;
      font-family: "Courier New", Courier, monospace;
      text-align: left;
    }

    /* Estilos para la sección de dibujos de los acordes */
    .dibujos-acordes {
      float: right;
      width: 30%;
      padding-right: 2%;
      text-align: right;
    }

    /* Estilos para hacer que la página sea responsiva */
    @media (max-width: 720px) {
      .letra-acordes, .dibujos-acordes {
        width: 100%;
        float: none;
      }
    }
  </style>
  <script>
    function cambiarTonalidad(semitonos) {
      let acordes = document.querySelectorAll('.dibujos-acordes img');
      acordes.forEach((acorde) => {
        let src = acorde.getAttribute('src');
        let tonalidad = src.charAt(9);
        let nota = src.charAt(11);
        let nuevaTonalidad = String.fromCharCode(tonalidad.charCodeAt(0) + semitonos);
        if (nuevaTonalidad === '@') nuevaTonalidad = 'A'; // si pasa de G a A
        if (nuevaTonalidad === 'H') nuevaTonalidad = 'B'; // si pasa de Bb a B
        let nuevoSrc = src.replace(tonalidad + nota, nuevaTonalidad + nota);
        acorde.setAttribute('src', nuevoSrc);
      });
    }
  </script>
</head>
<body>
  <br>
  <br>
  <div class="letra-acordes">
    <h2>NO ME SÉ RAJAR</h2>
    <h3>LA HIJA DEL MARIACHI</h3>
    <pre>
    SolM                          ReM
Hoy me reclamaron por venir a verte
                                 SolM
no quieren que vuelva por aqui jamas.
                                  DoM
Dicen que si vuelvo encontrare la muerte
              SolM        ReM  SolM
que por ti la vida me van a quitar.

SolM                          ReM
Piensan asustarme para que te deje
                            SolM
pero nunca nadie lo podra lograr.
                                    DoM
Mientras tu me quieras yo estare presente
            SolM      ReM  SolM
cerca de tu casa para platicar.

            Re7                  SolM
A mi no me asustan tipos lenguas larga
            Re7             SolM
que solo presumen por apantallar.
                                  DoM
Yo soy de los hombre que no temen nada
                 SolM       ReM  SolM
y aunque este perdido no me se rajar.

SolM                                ReM
SI tus pretendientes quieren que me muera
                             SolM
yo te lo aseguro que los burlare.
                              DoM
Yo sere tu dueño aunque no lo quieran
                SolM        Re7  SolM
y el que se atraviese te lo quitare.

SolM                            ReM  
Mañana sin falta aqui estare presente
                              SolM
ya sabes la hora no me quedes mal.
                               DoM
De lo que te dije no tengas pendiente
            SolM        ReM   SolM
solo Dios la vida me puede quitar.

            Re7                  SolM
A mi no me asustan tipos lenguas larga
            Re7             SolM
que solo presumen por apantallar.
                                  DoM
Yo soy de los hombre que no temen nada
                 SolM       ReM  SolM
y aunque este perdido no me se rajar.

</pre>
    <button onclick="cambiarTonalidad(1)">+</button>
    <button onclick="cambiarTonalidad(-1)">-</button>
  </div>
  <div class="dibujos-acordes">
    <img src="acordes/G.png" alt="SolM / G">
    <img src="acordes/D.png" alt="ReM / D">
    <img src="acordes/C.png" alt="DoM / C">
    <img src="acordes/D7.png" alt="Re7 / D7">
  </div>
  <br>
</body>
</html>
