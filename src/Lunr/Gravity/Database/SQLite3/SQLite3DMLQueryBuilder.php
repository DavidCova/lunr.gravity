<?php

/**
 * SQLite3 database query builder class.
 *
 * PHP Version 5.3
 *
 * @category   SQLite3
 * @package    Gravity
 * @subpackage Database
 * @author     Olivier Wizen <olivier@m2mobi.com>
 * @copyright  2013, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Lunr\Gravity\Database\SQLite3;

use Lunr\Gravity\Database\DatabaseDMLQueryBuilder;

/**
 * This is a SQL query builder class for generating queries suitable for SQLite3.
 *
 * @category   SQLite3
 * @package    Gravity
 * @subpackage Database
 * @author     Olivier Wizen <olivier@m2mobi.com>
 */
class SQLite3DMLQueryBuilder extends DatabaseDMLQueryBuilder
{

    /**
     * The left identifier delimiter.
     * @var String
     */
    const IDENTIFIER_DELIMITER_L = '"';

    /**
     * The right identifier delimiter.
     * @var String
     */
    const IDENTIFIER_DELIMITER_R = '"';

    /**
     * Shared instance of the SQLite3Connection class.
     * @var SQLite3Connection
     */
    protected $db;

    /**
     * Constructor.
     *
     * @param SQLite3Connection $db Shared instance of the SQLite3Connection class.
     */
    public function __construct($db)
    {
        parent::__construct();

        $this->db = $db;
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        unset($this->db);
        parent::__destruct();
    }

    /**
     * Define and escape input as value.
     *
     * @param mixed  $value     Input
     * @param String $collation Collation name
     * @param String $charset   Unused with SQLite
     *
     * @return String $return Defined and escaped value
     */
    public function value($value, $collation = '', $charset = '')
    {

    }

    /**
     * Not supported by sqlite. Returns the same as value
     *
     * @param mixed  $value     Input
     * @param String $collation Collation name
     * @param String $charset   Unused with SQLite
     *
     * @return String $return Defined, escaped and unhexed value
     */
    public function hexvalue($value, $collation = '', $charset = '')
    {

    }

    /**
     * Define and escape input as a hexadecimal value.
     *
     * @param mixed  $value     Input
     * @param String $match     Whether to match forward, backward or both
     * @param String $collation Collation name
     * @param String $charset   Unused with SQLite
     *
     * @return String $return Defined, escaped and unhexed value
     */
    public function likevalue($value, $match = 'both', $collation = '', $charset = '')
    {

    }

    /**
     * Define and escape input as index hint.
     *
     * @param String $keyword Whether to use INDEXED BY or NOT INDEXED the index/indices
     * @param array  $indices Array of indices
     * @param String $for     Unused with SQLite
     *
     * @return mixed $return NULL for invalid indices, escaped string otherwise.
     */
    public function index_hint($keyword, $indices, $for = '')
    {

    }

    /**
     * Not supported by SQLite.
     *
     * @param String $mode The delete mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function delete_mode($mode)
    {

    }

    /**
     * Define a DELETE clause.
     *
     * @param String $delete The tables to delete from
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function delete($delete = '')
    {

    }

    /**
     * Define the mode of the INSERT clause.
     *
     * @param String $mode The insert mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function insert_mode($mode)
    {

    }

    /**
     * Not supported by sqlite.
     *
     * @param String $mode The replace mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function replace_mode($mode)
    {

    }

    /**
     * Define INTO clause of the SQL statement.
     *
     * @param String $table Table reference
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function into($table)
    {

    }

    /**
     * Define a Select statement for Insert statement.
     *
     * @param String $select SQL Select statement to be used in Insert
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function select_statement($select)
    {

    }

    /**
     * Define SET clause of the SQL statement.
     *
     * For update only in SQLite.
     * For insert use SQLite3DMLQueryBuilder::column_names and SQLite3DMLQueryBuilder::values
     *
     * @param Array $set Array containing escaped key->value pairs to be set
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function set($set)
    {

    }

    /**
     * Define Column names of the affected by Insert or Update SQL statement.
     *
     * @param Array $keys Array containing escaped field names to be set
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function column_names($keys)
    {

    }

    /**
     * Define Values for Insert or Update SQL statement.
     *
     * @param Array $values Array containing escaped values to be set
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function values($values)
    {

    }

    /**
     * Define the mode of the SELECT clause.
     *
     * @param String $mode The select mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function select_mode($mode)
    {

    }

    /**
     * Define a SELECT clause.
     *
     * @param String $select The column(s) to select
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function select($select)
    {

    }

    /**
     * Define the mode of the UPDATE clause.
     *
     * @param String $mode The update mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function update_mode($mode)
    {

    }

    /**
     * Define a UPDATE clause.
     *
     * @param String $table The table to update
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function update($table)
    {

    }

    /**
     * Define FROM clause of the SQL statement.
     *
     * @param String $table_reference Table reference
     * @param array  $index_hints     Array of Index Hints
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function from($table_reference, $index_hints = NULL)
    {

    }

    /**
     * Define JOIN clause of the SQL statement,
     *
     * @param String $table_reference Table reference
     * @param String $type            Type of JOIN operation to perform.
     * @param array  $index_hints     Array of Index Hints
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function join($table_reference, $type = 'INNER', $index_hints = NULL)
    {

    }

    /**
     * Define ON part of a JOIN clause of the SQL statement.
     *
     * @param String $left     Left expression
     * @param String $right    Right expression
     * @param String $operator Comparison operator
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function on($left, $right, $operator = '=')
    {

    }

    /**
     * Define ON part of a JOIN clause with LIKE comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function on_like($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define ON part of a JOIN clause with IN comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function on_in($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define ON part of a JOIN clause with BETWEEN comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $lower  The lower bound of the between condition
     * @param String $upper  The upper bound of the between condition
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function on_between($left, $lower, $upper, $negate = FALSE)
    {

    }

    /**
     * Define ON part of a JOIN clause with REGEXP comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function on_regexp($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define WHERE clause of the SQL statement.
     *
     * @param String $left     Left expression
     * @param String $right    Right expression
     * @param String $operator Comparison operator
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function where($left, $right, $operator = '=')
    {

    }

    /**
     * Define WHERE clause with LIKE comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function where_like($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define WHERE clause with the IN condition of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the condition or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function where_in($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define WHERE clause with the BETWEEN condition of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $lower  The lower bound of the between condition
     * @param String $upper  The upper bound of the between condition
     * @param String $negate Whether to negate the condition or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function where_between($left, $lower, $upper, $negate = FALSE)
    {

    }

    /**
     * Define WHERE clause with the REGEXP condition of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the condition or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function where_regexp($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define GROUP BY clause of the SQL statement.
     *
     * @param String  $expr  Expression to group by
     * @param Boolean $order Not supported by SQLite
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function group_by($expr, $order = NULL)
    {

    }

    /**
     * Define HAVING clause of the SQL statement.
     *
     * @param String $left     Left expression
     * @param String $right    Right expression
     * @param String $operator Comparison operator
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function having($left, $right, $operator = '=')
    {

    }

    /**
     * Define HAVING clause with LIKE comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function having_like($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define HAVING clause with IN comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function having_in($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define HAVING clause with BETWEEN comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $lower  The lower bound of the between condition
     * @param String $upper  The upper bound of the between condition
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function having_between($left, $lower, $upper, $negate = FALSE)
    {

    }

    /**
     * Define HAVING clause with REGEXP comparator of the SQL statement.
     *
     * @param String $left   Left expression
     * @param String $right  Right expression
     * @param String $negate Whether to negate the comparison or not
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function having_regexp($left, $right, $negate = FALSE)
    {

    }

    /**
     * Define ORDER BY clause in the SQL statement.
     *
     * @param String  $expr Expression to order by
     * @param Boolean $asc  Order ASCending/TRUE or DESCending/FALSE
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function order_by($expr, $asc = TRUE)
    {

    }

    /**
     * Define a LIMIT clause of the SQL statement.
     *
     * @param Integer $amount The amount of elements to retrieve
     * @param Integer $offset Start retrieving elements from a specific index
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function limit($amount, $offset = -1)
    {

    }

    /**
     * Define a UNION or UNION ALL clause of the SQL statement
     *
     * @param String $sql_query   sql query reference
     * @param Boolean $all   True for ALL or False for empty (default).
     *
     * @return DMLQueryBuilderInterface $self Self reference
     */
    public function union($sql_query, $all = FALSE)
    {

    }

    /**
     * Not supported by SQLite.
     *
     * @param String $mode The lock mode you want to use
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function lock_mode($mode)
    {

    }

    /**
     * Set logical connector 'AND'.
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function sql_and()
    {

    }

    /**
     * Set logical connector 'OR'.
     *
     * @return SQLite3DMLQueryBuilder $self Self reference
     */
    public function sql_or()
    {

    }

}

?>
