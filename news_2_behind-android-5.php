<?php include 'include_header.php';?>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          <h2>Behind Android 5</h2>
            <p><i>2015-02-13</i></p>
            <div class="divider"></div>
            <h5>Everything thanks to a guy from the internet</h5>
            <p>When the T42 died the time that I could spend on this project were significatly reduced. Android 5 support were probably ready on summer.</p>
            <p>But now, cSploit works on Android 5!</p>
            <p>All this thanks to one guy, he contacted me via email after I wrote about my old T42 and purchased me an used T60 notebook.</p>

            <p>This kindfull act make me proud about our growing community.</p>

            <br>

            <h5>Hack and trick</h5>
            <h6><b>Network Radar</b></h6>
            <p>The first issue fixed on Android 5 were with the replacement of <b>NetworkDiscovery</b>. <b>NetworkDiscovery</b> were wrote in java and opens a lot of sockets for searching hosts in your local subnet. that was horrible :D. All these opened sockets made cSploit reach the maximum number of opened files on Android 5.</p>

            <p>I rewrote it <b>completely</b> in plain ANSI C.</p>
            <p>I changed it's name to <b>NetworkRadar</b>, thus to give a better idea of what it does. for more infos about this component of cSploit visit the <a href="https://github.com/cSploit/network-radar/" >project page</a>.</p>

            <h6><b>Socket context</b></h6>
            <p>Tthe second issue I fixed were a selinux restriction about accessing the <b>/dev/socket</b> folder. Moving the cSploit UNIX socket inside the app folder fixed this.</p>
            
            <h6><b>PIE</b></h6>
            <p>Last but not least problem were the PIE restricion (Position Indipendent Executables). Android 5 support only executables compiled with the PIE flag. android version prior to <i>JELLY_BEAN</i> does not support this kind of executables.</p>

            <p>My choice for fixing this problem were to build the core and the ruby package twice, one for the PIE platforms and one for the non PIE platform.</p>

            <p>cSploit will detect your platform on boot and install the right core.</p>

            <p>This solution have many impacts on many aspect of cSploit. First of all the APK size is reduced from ~10MB to ~3MB. this means a faster startup of the application ;)</p>

            <p>Another aspect is that we can now create ad-hoc core packages. Say that one day a particular bug on many devices is found, well just detect the bug on boot and download the ad-hoc core package.</p>

            <br>

            <h5>Special thanks</h5>
            <ul>
              <li>- the guy that purchased me a new notebook, he make me able to work on cSploit in these months</li>
              <li>- all of you that have helped me in testing cSploit on lollipo devices</li>
              <li>- all those contributors that manage translations for me, thus to let me focus on the code</li>
            </ul>

        </div>
      </div>
    </div>


    <br><br>

    <div class="section">
    </div>
  </div>
<?php include 'include_footer.php';?>