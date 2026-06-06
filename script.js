const fontsData = [
  { name: "Montserrat", category: "Sans Serif", weight: 900 },
  { name: "Oswald", category: "Sans Serif", weight: 700 },
  { name: "Playfair Display", category: "Serif", weight: 900 },
  { name: "Cinzel", category: "Serif", weight: 700 },
  { name: "Bebas Neue", category: "Display", weight: 400 },
  { name: "Righteous", category: "Display", weight: 400 },
  { name: "Abril Fatface", category: "Display", weight: 400 },
  { name: "Pacifico", category: "Handwriting", weight: 400 },
  { name: "Syncopate", category: "Sans Serif", weight: 700 },
  { name: "Audiowide", category: "Display", weight: 400 },
  { name: "Monoton", category: "Display", weight: 400 },
  { name: "Permanent Marker", category: "Handwriting", weight: 400 },
  { name: "Orbitron", category: "Sans Serif", weight: 900 },
  { name: "Press Start 2P", category: "Display", weight: 400 },
  { name: "Teko", category: "Sans Serif", weight: 600 },
  { name: "Lobster", category: "Display", weight: 400 },
  { name: "Space Grotesk", category: "Sans Serif", weight: 700 },
  { name: "Chakra Petch", category: "Sans Serif", weight: 700 },
  { name: "Russo One", category: "Sans Serif", weight: 400 },
  { name: "Bungee", category: "Display", weight: 400 },
  { name: "Alfa Slab One", category: "Display", weight: 400 },
  { name: "Bangers", category: "Display", weight: 400 },
  { name: "Black Ops One", category: "Display", weight: 400 },
  { name: "Comfortaa", category: "Display", weight: 700 },
  { name: "Dancing Script", category: "Handwriting", weight: 700 },
  { name: "Exo 2", category: "Sans Serif", weight: 800 },
  { name: "Fjalla One", category: "Sans Serif", weight: 400 },
  { name: "Fredoka One", category: "Display", weight: 400 },
  { name: "Great Vibes", category: "Handwriting", weight: 400 },
  { name: "Josefin Sans", category: "Sans Serif", weight: 700 },
  { name: "Kanit", category: "Sans Serif", weight: 800 },
  { name: "Lilita One", category: "Display", weight: 400 },
  { name: "Michroma", category: "Sans Serif", weight: 400 },
  { name: "Outfit", category: "Sans Serif", weight: 800 },
  { name: "Paytone One", category: "Sans Serif", weight: 400 },
  { name: "Quicksand", category: "Sans Serif", weight: 700 },
  { name: "Rubik", category: "Sans Serif", weight: 800 },
  { name: "Titan One", category: "Display", weight: 400 },
  { name: "Vampiro One", category: "Display", weight: 400 },
  { name: "Zilla Slab Highlight", category: "Display", weight: 700 },
  // 50 Coffee Shop Style Fonts
  { name: "Amatic SC", category: "Handwriting", weight: 700 },
  { name: "Anton", category: "Display", weight: 400 },
  { name: "Archivo Black", category: "Sans Serif", weight: 400 },
  { name: "Arvo", category: "Serif", weight: 700 },
  { name: "Bitter", category: "Serif", weight: 700 },
  { name: "Bree Serif", category: "Serif", weight: 400 },
  { name: "Cabin", category: "Sans Serif", weight: 700 },
  { name: "Caveat", category: "Handwriting", weight: 700 },
  { name: "Cookie", category: "Handwriting", weight: 400 },
  { name: "Cormorant Garamond", category: "Serif", weight: 700 },
  { name: "Courgette", category: "Handwriting", weight: 400 },
  { name: "Crimson Text", category: "Serif", weight: 700 },
  { name: "Domine", category: "Serif", weight: 700 },
  { name: "Dosis", category: "Sans Serif", weight: 700 },
  { name: "EB Garamond", category: "Serif", weight: 700 },
  { name: "Eczar", category: "Serif", weight: 700 },
  { name: "Francois One", category: "Sans Serif", weight: 400 },
  { name: "Gabriela", category: "Serif", weight: 400 },
  { name: "Glegoo", category: "Serif", weight: 700 },
  { name: "Inconsolata", category: "Monospace", weight: 700 },
  { name: "Indie Flower", category: "Handwriting", weight: 400 },
  { name: "Josefin Slab", category: "Serif", weight: 700 },
  { name: "Kaushan Script", category: "Handwriting", weight: 400 },
  { name: "Lato", category: "Sans Serif", weight: 700 },
  { name: "Leckerli One", category: "Handwriting", weight: 400 },
  { name: "Lora", category: "Serif", weight: 700 },
  { name: "Marcellus", category: "Serif", weight: 400 },
  { name: "Merriweather", category: "Serif", weight: 700 },
  { name: "Neuton", category: "Serif", weight: 700 },
  { name: "Norican", category: "Handwriting", weight: 400 },
  { name: "Old Standard TT", category: "Serif", weight: 700 },
  { name: "Ole", category: "Display", weight: 400 },
  { name: "Parisienne", category: "Handwriting", weight: 400 },
  { name: "Patrick Hand", category: "Handwriting", weight: 400 },
  { name: "Patua One", category: "Display", weight: 400 },
  { name: "Poppins", category: "Sans Serif", weight: 700 },
  { name: "Prata", category: "Serif", weight: 400 },
  { name: "PT Serif", category: "Serif", weight: 700 },
  { name: "Raleway", category: "Sans Serif", weight: 700 },
  { name: "Rokkitt", category: "Serif", weight: 700 },
  { name: "Rye", category: "Display", weight: 400 },
  { name: "Sacramento", category: "Handwriting", weight: 400 },
  { name: "Sancreek", category: "Display", weight: 400 },
  { name: "Satisfy", category: "Handwriting", weight: 400 },
  { name: "Special Elite", category: "Display", weight: 400 },
  { name: "Tangerine", category: "Handwriting", weight: 700 },
  { name: "Trocchi", category: "Serif", weight: 400 },
  { name: "Ubuntu", category: "Sans Serif", weight: 700 },
  { name: "Vollkorn", category: "Serif", weight: 700 },
  { name: "Yellowtail", category: "Handwriting", weight: 400 },
];

const gridContainer = document.getElementById("logo-grid");

fontsData.forEach((font, index) => {
  const card = document.createElement("div");
  card.className = "font-card";
  card.style.animationDelay = `${index * 0.05}s`;

  const fontClassName = font.name.replace(/\s+/g, "-");

  // Check if handwriting/display to avoid using sans-serif fallback if unneeded,
  // but a generic fallback is fine. For Pacifico or Lobster, cursive is better fallback.
  let fallback = "sans-serif";
  if (font.category === "Handwriting" || font.name === "Lobster") {
    fallback = "cursive";
  } else if (font.category === "Serif") {
    fallback = "serif";
  }

  const fontFamilyRule = `'${font.name}', ${fallback}`;

  card.innerHTML = `
        <div class="logo-display ${fontClassName}" style="font-family: ${fontFamilyRule}; font-weight: ${font.weight};">
            <span class="mirrored-two">2</span><span class="zero-seven">07</span>
        </div>
        <div class="font-info">
            <h3 class="font-name">${font.name}</h3>
            <p class="font-category">${font.category}</p>
        </div>
    `;

  gridContainer.appendChild(card);
});

// Add subtle entry animation for cards
const style = document.createElement("style");
style.innerHTML = `
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .font-card {
        animation: fadeInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) both;
    }
`;
document.head.appendChild(style);
