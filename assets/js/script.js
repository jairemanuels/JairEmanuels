var words =

  [
    "programmeurs",
    "SaaS-founders",
    "ontwerpers",
    "tech-liefhebbers",
    "webontwikkelaars",
  ];

// Voeg hier meer woorden toe
var index = 0;
var currentWord = '';

var typewriter = new Typewriter(title, {
  delay: 75,
});

typewriter.typeString('De community voor<br>').start(); // Voeg een regelovergang toe na "De community voor"

function typeWord() {
  if (currentWord) {
    typewriter.deleteChars(currentWord.length);
  }

  // Controleer of het volgende woord hetzelfde is als het huidige woord
  if (words[index] === currentWord) {
    index++;
    if (index >= words.length) {
      index = 0;
    }
  }

  currentWord = words[index];
  typewriter
    .typeString(currentWord)
    .pauseFor(1200) // Pauzeer 1.2 seconden na het typen van het woord
    .callFunction(() => {
      index++;
      if (index >= words.length) {
        index = 0;
      }
      setTimeout(typeWord, 1000); // Wacht 1 seconden voordat je het volgende woord typt
    })
    .start();
}

typeWord(); // Start het typen van het eerste woord direct