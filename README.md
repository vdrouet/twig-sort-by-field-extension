# twig-sort-by-field-extension
A twig extension to sort a Doctrine ArrayCollection by a specified field

## Usage
{% sortedResult = myArray|sortbyfield('myDate') %}

### Specify a sortDirection
By default the sort direction is asc
{% sortedResult = myArray|sortbyfield('myDate', 'desc') %}
