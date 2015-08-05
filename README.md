# twig-sort-by-field-extension
A twig extension to sort a Doctrine ArrayCollection by a specified field

## Usage
```twig
{% sortedResult = myArray|sortbyfield('myDate') %}
```

### Specify a sortDirection
By default the sort direction is asc
```twig
{% sortedResult = myArray|sortbyfield('myDate', 'desc') %}
```
