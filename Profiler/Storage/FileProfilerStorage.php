<?php

namespace Profiler\LiveBundle\Profiler\Storage;

use Symfony\Component\HttpKernel\Profiler\FileProfilerStorage as BaseMysqlProfilerStorage;

/**
 * Storage for profiler using files.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class FileProfilerStorage extends BaseMysqlProfilerStorage
{
   /**
     * Get the profiles since a token
     *
     * @param string   $token   Token to retrieve from
     * @return array            Tokens
     */
    public function fetchProfilesSince($token)
    {
        return null;
       /* $criteria   = array();
        $args       = array();

        // Get latest tokens, exclude tokens to live profiler URL's
        $criteria[]     = 'token > :token';
        $criteria[]     = 'url NOT LIKE :profilerUrl';
        $criteria[]     = 'parent = :parent';

        $args[':token']         = $token;
        $args[':profilerUrl']   = '%/_live_profiler%';
        $args[':parent']        = '';

        $criteria = $criteria ? 'WHERE '.implode(' AND ', $criteria) : '';

        $db = $this->initDb();
        $sql = 'SELECT token, data, ip, url, time, parent
                FROM sf_profiler_data '.$criteria.'
                ORDER BY token ASC';
        $rawProfiles = $this->fetch($db, $sql, $args);
        $this->close($db);

        $profiles = array();
        foreach ($rawProfiles as $rawProfile) {
            $profiles[] = $this->createProfileFromData($rawProfile['token'], $rawProfile);
        }
        return $profiles;*/
    }
}
