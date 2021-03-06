<?php
/*
    NameID, a namecoin based OpenID identity provider.
    Copyright (C) 2013 by Daniel Kraft <d@domob.eu>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/* Code for writing HTML output.  */

/**
 * Manage writing of HTML.
 */
class HtmlOutput
{

  /**
   * Construct.
   */
  public function __construct ()
  {
    // Nothing to be done.
  }

  /**
   * Close at the end.
   */
  public function close ()
  {
    // Nothing to be done.
  }

  /**
   * Escape a string for HTML.
   * @param str The string as literal text.
   * @return HTML version with entities escaped.
   */
  public function escape ($str)
  {
    return htmlentities ($str, ENT_QUOTES, "utf-8");
  }

}

?>
