<?php

namespace Razziel2x\SentenceGenerator;
class SentenceGenerator
{
  private array $sentences = [
    "Zmiany są trudne, ale zatrzymanie się jest katastrofą.",
    "Kto nie ryzykuje, ten nie pije szampana.",
    "Życie to nie czekanie, aż burza minie, ale nauka, jak tańczyć w deszczu.",
    "Szczęście to nie cel, ale sposób podróżowania.",
    "O sukcesie decydują nie okoliczności, ale decyzje.",
    "Nie porównuj swojego rozdziału 1 do czyjegoś rozdziału 20.",
    "Przeszłość i przyszłość nie mają znaczenia, kiedy żyjesz w teraźniejszości.",
    "Jeśli chcesz iść szybko, idź sam. Jeśli chcesz iść daleko, idź z innymi.",
    "Co nas nie zabije, to nas wzmocni.",
    "Nie bój się zamykać drzwi, które nie prowadzą donikąd."
  ];

  public function get(): string
  {
    return $this->sentences[array_rand($this->sentences)];
  }
}
