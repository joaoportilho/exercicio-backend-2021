<?php
namespace Drupal\textwrap;

/**
 * Implemente sua resolução nessa classe.
 *
 * Depois disso:
 * - [ ] Crie um PR no github com seu código
 * - [ ] Veja o resultado da correção automática do seu código
 * - [ ] Commit até os testes passarem
 * - [ ] Passou tudo, melhore a cobertura dos testes
 * - [ ] Ficou satisfeito, envie seu exercício para a gente! <3
 *
 * Boa sorte :D
 */
class TextWrap implements TextWrapInterface
{

  /**
   * {@inheritdoc}
   */
  public function wrap(string $text, int $length): array
  {
    // Apague o código abaixo e escreva sua própria implementação,
    // nós colocamos esse mock para poder rodar a análise de cobertura dos
    // testes unitários.
    $res[] = NULL;
    $arrayAux[] = NULL;

    // Declarando as classes das funções
    $extrair = new WordExtractor();
    $organizar = new ArrayOrganizer();
    // Chama-se a função criada para extrair as palavras, chamada de wordExtractor.
    $arrayAux = $extrair->wordExtractor($text);
    //$arrayAux[count($arrayAux)] = "end";
    $res = $organizar->arrayOrganizer($arrayAux, $length);
    return $res;
  }
}
