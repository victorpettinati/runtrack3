const tiles = document.querySelectorAll('.tile');
let emptyTile;

// Ajoute un écouteur d'événement aux tuiles
tiles.forEach(tile => {
  tile.addEventListener('click', () => {
    if (isValidMove(tile)) {
      swapTiles(tile, emptyTile);
    }
  });
});

// Ajoute un écouteur d'événement pour les touches de direction du clavier
document.addEventListener('keydown', event => {
  const key = event.key;
  const arrowKeys = ['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight'];

  if (arrowKeys.includes(key)) {
    event.preventDefault();
    const emptyIndex = Array.from(tiles).indexOf(emptyTile);
    const row = Math.floor(emptyIndex / 3);
    const col = emptyIndex % 3;
    let targetIndex;

    if (key === 'ArrowUp' && row < 2) {
      targetIndex = emptyIndex + 3;
    } else if (key === 'ArrowDown' && row > 0) {
      targetIndex = emptyIndex - 3;
    } else if (key === 'ArrowLeft' && col < 2) {
      targetIndex = emptyIndex + 1;
    } else if (key === 'ArrowRight' && col > 0) {
      targetIndex = emptyIndex - 1;
    }

    if (targetIndex !== undefined) {
      const targetTile = tiles[targetIndex];
      swapTiles(targetTile, emptyTile);
    }
  }
});

// Mélange les tuiles aléatoirement
function shuffleTiles() {
  const tileOrder = Array.from({length: 9}, (_, index) => index);
  tileOrder.sort(() => Math.random() - 0.5);

  tiles.forEach((tile, index) => {
    const img = tile.querySelector('img');
    img.src = `image${tileOrder[index] + 1}.jpg`;

    if (tileOrder[index] === 0) {
      emptyTile = tile;
      tile.classList.add('empty');
    } else {
      tile.classList.remove('empty');
    }
  });
}

// Vérifie si le mouvement est valide
function isValidMove(tile) {
  const tileIndex = Array.from(tiles).indexOf(tile);
  const emptyIndex = Array.from(tiles).indexOf(emptyTile);
  const diff = Math.abs(tileIndex - emptyIndex);

  return (
    (diff === 1 && Math.floor(tileIndex / 3) === Math.floor(emptyIndex / 3)) ||
    (diff === 3 && tileIndex % 3 === emptyIndex % 3)
  );
}

// Échange les positions des tuiles
function swapTiles(tile1, tile2) {
  const tile1Index = Array.from(tiles).indexOf(tile1);
  const tile2Index = Array.from(tiles).indexOf(tile2);

  // Échange les positions des tuiles dans le tableau
  [tiles[tile1Index], tiles[tile2Index]] = [tiles[tile2Index], tiles[tile1Index]];

  // Met à jour les positions dans le DOM
  tile1.parentNode.insertBefore(tile1, tile2);

  // Met à jour la tuile vide
  emptyTile = tile1;

  // Vérifie si le jeu est terminé
  if (isGameOver()) {
    setTimeout(() => {
      alert('Félicitations ! Vous avez terminé le jeu.');
    }, 100);
  }
}

// Vérifie si toutes les tuiles sont dans l'ordre
function isGameOver() {
  const tileOrder = Array.from({length: 9}, (_, index) => index);
  const currentOrder = Array.from(tiles, tile => {
    const img = tile.querySelector('img');
    return parseInt(img.src.match(/image(\d+)\.jpg/)[1]) - 1;
  });

  return tileOrder.every((value, index) => value === currentOrder[index]);
}
