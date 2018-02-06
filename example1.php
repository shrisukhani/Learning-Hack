<?hh

function a(int $x): int {
  return $x + 1;
}

function main(): void {
  echo a(67);
  echo "\t";
  echo a(5);
}

main();
