# KCFinder web file manager
##### Original KCFinder web file manager by Pavel Tzonkov (sunhater@sunhater.com) is on http://kcfinder.sunhater.com  

##### This fork is managing by Radius17 (radius17@gmail.com)
##### It can contain some features that are not compatible with original version

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE. 

## Licenses
* GNU General Public License, version 3
* GNU Lesser General Public License, version 3

## Overview
KCFinder is free open-source replacement of CKFinder web file manager. It can be integrated into FCKeditor, CKEditor, and TinyMCE WYSIWYG web editors (or your custom web applications) to upload and manage images, flash movies, and other files that can be embedded into an editor's generated HTML content.

## Features
* Ajax engine with JSON responses
* Multiple files upload
* Upload files using HTML5 drag and drop from local file manager
* Drag and drop images from external HTML pages. Multiple images can be dropped using selection (Firefox only)
* Download multiple files or a folder as single ZIP file
* Select multiple files with the Ctrl/Command key
* Clipboard for copying, moving and downloading multiple files
* Easy to integrate and configure in web applications
* Option to select and return several files. For custom applications only
* Resize uploaded images. Configurable maximum image resolution
* PNG watermark support
* Configurable thumbnail resolution
* Automaticaly rotate and/or flip uploaded images depending on the orientation info EXIF tag if it exist
* Multiple themes support
* Multilanguage system
* Preview images in full size

## Compatibility
* KCFinder is officialy tested on Apache 2 web server only, but probably it will work on other web servers.
* PHP 5.3 or better is required. Safe mode should be off.
* At least one of these PHP extensions is required: GD, ImageMagick or GraphicsMagick.
* To work with client-side HTTP cache, the PHP must be installed as Apache module.
* KCFinder supports MIME type recognition for the uploaded files. If you plan to use this feature, you should to load Fileinfo PHP extension.
* PHP ZIP extension should be loaded in order to have an option to download multiple files and directories as single ZIP file.
* Automatic rotating and flipping images requires PHP EXIF extension.
