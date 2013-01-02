Carabiner
=========

JS/CSS Asset management library for CodeIgniter

*Note: This project is not in active development. I'm happy to merge pull requests, assuming they make sense and work. Also, tests are a bonus.*

Carabiner manages javascript and CSS assets.  It will react differently depending on whether it is in a production or development environment.  In a production environment, it will combine, minify, and cache assets. (As files are changed, new cache files will be generated.) In a development environment, it will simply include references to the original assets.

Carabiner requires the [JSMin](http://codeigniter.com/forums/viewthread/103039/) and [CSSMin](http://codeigniter.com/forums/viewthread/103269/) libraries included. You don't need to load them unless you'll be using them elsewhise.  Carabiner will load them automatically as needed.

Notes: Carabiner does not implement GZIP encoding, because I think that the web server should handle that.  If you need GZIP in an Asset Library, [AssetLibPro](http://code.google.com/p/assetlib-pro/) does it.  I've also chosen not to implement any kind of javascript obfuscation (like packer), because of the client-side decompression overhead. More about this idea from [John Resig](http://ejohn.org/blog/library-loading-speed/). However, that's not to say you can't do it. You can easily provide a production version of a script that is packed.  However, note that combining a packed script with minified scripts could cause problems. In that case, you can flag it to be not combined.

Carabiner is inspired by [Minify](http://code.google.com/p/minify/) by Steve Clay, [PHP Combine](http://rakaz.nl/extra/code/combine/) by Niels Leenheer and (AssetLibPro)(http://code.google.com/p/assetlib-pro/) by Vincent Esche, among other things.

Read the top of [the main library file](https://github.com/tonydewan/Carabiner/blob/master/libraries/carabiner.php) for usage guidelines.
