<?php

class Retailers extends SplHeap
{
    /**
     * Compare retailers in order to place them correctly in the heap
     *
     * @param array $retailer1
     * @param array $retailer2
     * @return int
     */
    public function compare($retailer1, $retailer2)
    {
        return $retailer1['popularity'] - $retailer2['popularity'];
    }

    /**
     * Is invoked on each element in the $retailers array
     *
     * @param $retailer
     */
    public function addRetailer($retailer)
    {
        $this->insert($retailer);
    }

    /**
     * Get the name of the most popular retailer in a country
     *
     * @param string $country
     * @return string
     */
    public function mostPopularRetailer($country)
    {
        $mostPopularRetailer = '';

        while ($this->valid()) {
            if ($this->current()['country'] == $country) {
                $mostPopularRetailer = $this->current()['name'];
                break;
            }
            $this->next();
        }

        return $mostPopularRetailer;
    }

    /**
     * Get name of the most popular retailer whose name starts with the auto-complete string
     *
     * @param string $autoCompletePrefix
     * @return string
     */
    public function autocomplete($autoCompletePrefix)
    {
        $mostPopularRetailer = '';

        while ($this->valid()) {
            if (strpos($this->current()['name'], $autoCompletePrefix) === 0) {
                $mostPopularRetailer = $this->current()['name'];
                break;
            }
            $this->next();
        }

        return $mostPopularRetailer;
    }
}

$retailers = [
    [
        'name' => 'abercrombie and fitch',
        'popularity' => 20,
        'country' => 'US'
    ],
    [
        'name' => 'about you',
        'popularity' => 60,
        'country' => 'DE'
    ],
    [
        'name' => 'amazon',
        'popularity' => 200,
        'country' => 'US'
    ],
    [
        'name' => 'asos',
        'popularity' => 100,
        'country' => 'US'
    ],
    [
        'name' => 'asos',
        'popularity' => 80,
        'country' => 'UK'
    ],
];

$object = new Retailers();

$object->addRetailer($retailers[0]);
$object->addRetailer($retailers[1]);
$object->addRetailer($retailers[2]);
$object->addRetailer($retailers[4]);

var_dump($object->autocomplete('ab'));

//$auto = $object->autocomplete('US');

