
VO Responsive Images
-------------------------------------------------------------

This extension provides the possibility to have different
aliases for the different screen resolutions supported by
your responsive design.

Installation
------------

Installing eZ SaferPay Payment Gateway extension
==============================================

1. Install the package into the 'extension' directory in
   the root of your eZ publish installation.

3. You must now enable the extension in eZ publish. To do
   this edit site.ini.append.php in the /settings/override
   folder. If this file does not exist; create it. Locate (or add)
   the block [ExtensionSettings] and add the line:
   ActiveExtensions[]=voresponsive

4. The following line of Javascript has to be executed on
   each request, the simplest way is to up it in the pagelayout.tpl
<pre><code>
   document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';
</code></pre>
5. Configure the Aliases corresponding to the different Screen resolutions in the 


License Information
-------------------

This program is free software; you can redistribute it and/or  
modify it under the terms of version 2.0  of the GNU General  
Public License as published by the Free Software Foundation.  

This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
GNU General Public License for more details.

You can find a copy of this software here: https://github.com/visualonline/voresponsive



CREDITS
-------
Visual Online SA
Yves Thommes <ythommes@visual-online.lu>

This extension is based on the Adaptive Image my Matt Wilcox (http://adaptive-images.com/)
