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
    <h2>SINTIENDOLO MUCHO</h2>
    <h3>JOAQUIN SABINA</h3>
    <pre>

CAPOTRASTE 2 CASILLA

F C G Am -  F C G
F C E  Am - F G

     C                            F
Por fin ayer llegó la hora tan temida
            Dm                      G
de hacer balance de mi vida y terminar esta canción
              E                          Am
y en vez de echar sal y vinagre en las heridas
          F        G         C
haré otra vez de tripas corazón.

        C                         F
No me veréis en Benidorm con el Imserso,
          Dm                           G
nadie me tiene que explicar que dos y dos no suman cuatro,
         E                           Am
que la poesía es el desván de un metaverso
            F          G             C
donde las musas se desnudan como albatros.

          C                       F
No tengo nada que olvidar de mi pasado,
          Dm                          G
por eso espero que el olvido no se olvide de quien fui,
        E                              Am
he dado más de lo que algunos me han robado,
        F                G        C
sin olvidar a la que se olvidó de mí.

              F
Siempre he querido envejecer sin dignidad,
            G                           C
aunque al fusil ya no le quede ni un cartucho,
          Am                       G
si el corazón no rima con la realidad,
            F        G        C
cambio de rumbo, sintiéndolo mucho…

F C G - C - F C G - F C E - Am - F  G

          C                         F
Muchos creyeron que me habían amortizado
        Dm                         G
cuando viajé del Wizink Center en camilla al hospital,
         E                      Am
con los dedos del Serrat entrelazados
     F             G        C
devolviéndome las ganas de cantar.

           C                             F
El pan de ayer no es un buen postre para hoy
        Dm                      G
mañana lunes es momento de inventarse y apostar,
         E                            Am
ya que Fernando me ha pintado en esta peli tal cual soy:
     F              G         C
un tahúr que no se cansa de arriesgar.

              F
Siempre he querido envejecer sin dignidad,
             G                          C
aunque al fusil ya no le quede ni un cartucho,
          Am                       G
si el corazón no rima con la realidad,
             F         G       C     F G
cambio de tercio, sintiéndolo mucho…
F
Aunque entre el sueño y el papel algo se pierde
                      G               C
y con los años duele más cuando me escucho,
          Am                       G
fingiendo ser un estupendo viejo verde…
         F      G           C
y lo de viejo, sintiéndolo mucho…

F
Siempre he querido envejecer sin dignidad,
            G                            C
aunque al fusil ya no le quede ni un cartucho,
          Am                      G
si el corazón no rima con la realidad,
            F        G        C
quemo mis naves, sintiéndolo mucho…

</pre>
    <button onclick="cambiarTonalidad(1)">+</button>
    <button onclick="cambiarTonalidad(-1)">-</button>
  </div>
  <div class="dibujos-acordes">
    <img src="acordes/G.png" alt="SolM / G">
    <img src="acordes/F.png" alt="FaM / F">
    <img src="acordes/C.png" alt="DoM / C">
    <img src="acordes/Am.png" alt="Lam / Am">
    <img src="acordes/Dm.png" alt="Rem / Dm">
    <img src="acordes/E.png" alt="MiM / E">
  </div>
  <br>
</body>
</html>
