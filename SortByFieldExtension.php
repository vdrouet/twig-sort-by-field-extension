namespace vdrouet\AcmeBundle\Twig;

/**
 * Twig extension to sort Doctrine ArrayCollection by a specified field
 *
 * @author vincent.drouet
 */
class SortByFieldExtension extends \Twig_Extension
{

    public function getName()
    {
        return 'sortbyfield';
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('sortbyfield', array($this, 'sortByFilter')),
        );
    }

    public function sortByFilter($collectionToSort, $sortField, $direction = "asc")
    {
        $iterator = $collectionToSort->getIterator();

        $iterator->uasort(function($a, $b) use ($sortField, $direction) {
            if ($a->{'get' . ucfirst($sortField)}() === $b->{'get' . ucfirst($sortField)}()) {
                return ($direction == "asc") ? 0 : 1;
            }
            if ($a->{'get' . ucfirst($sortField)}() > $b->{'get' . ucfirst($sortField)}()) {
                return ($direction == "desc") ? 0 : 1;
            }
            return -1;
        });

        return $iterator;
    }
