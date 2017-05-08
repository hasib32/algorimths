<?php
class Thesaurus
{
    private $thesaurus;

    public function __construct($thesaurus)
    {
        $this->Thesaurus($thesaurus);
    }

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        $response = [];
        if (array_key_exists($word, $this->thesaurus)) {
            $response['word'] = $word;
            $response['synonyms'] = $this->thesaurus[$word];
        } else {
            $response['word'] = $word;
            $response['synonyms'] = [];
        }

        return json_encode($response);
    }
}

$thesaurus = new Thesaurus(
    array
    (
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));

echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");