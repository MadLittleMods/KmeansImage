# KmeansImage

PHP Class to find the Dominant Color of any .png Image using K-means Clustering

## Working project that utilize this script
[How Chrome Calculates the Color Stripe](http://apps.visualpulse.net/kmean_chrome_color_stripe/)

# [API](http://visualpulse.net/forums/index.php?topic=289)

There is also a API hosted so you can access this calculation in your app. You can [read more in this article](http://visualpulse.net/forums/index.php?topic=289).

The API returns a JSON format of the data. Here is an example of the output:

Call:
`http://apps.visualpulse.net/kmean_chrome_color_stripe/api.php?url=http://visualpulse.net/&k=3`

Output:

```
{
	"rgb": {
		"r": 97,
		"g": 107,
		"b": 169
	},
	"hex": "616ba9",
	"url": "visualpulse.net",
	"k": 3,
	"ignoreExtremity": true,
	"blackLevel": 10,
	"whiteLevel": 245
}
```
