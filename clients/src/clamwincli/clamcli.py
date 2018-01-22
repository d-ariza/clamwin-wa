import urllib, json
import ConfigParser
import sys, os
import logging

logger = logging.getLogger('root')

class ClamCli():
    def __init__(self):
        pass

    def SetProxy(self, proxy):
        # https://stackoverflow.com/questions/311627/how-to-print-date-in-a-regular-format-in-python
        logger.info("os.name: " + os.name)
        if os.name == "nt":
            appdata = os.getenv("APPDATA")
            clamwinconf = os.path.join(appdata, ".clamwin", "ClamWin.conf")
            logger.info("clamwinconf: " + clamwinconf)

            parser = ConfigParser.RawConfigParser()
            parser.read(clamwinconf)

            print(parser.get("Proxy", "host"))

    def GetProxy(self):
        APIUri = "http://localhost/clamwin-wa/api/proxy"
        logger.info("Querying REST API: " + APIUri);

        # https://stackoverflow.com/questions/12965203/how-to-get-json-from-webpage-into-python-script
        j = None
        proxy = None
        try:
            response = urllib.urlopen(APIUri)
            j = response.read()
            logger.debug("Response: " + j)
        except:
            logger.error(sys.exc_info()[1])

        if j is not None:
            # https://stackoverflow.com/questions/15476983/deserialize-a-json-string-to-an-object-in-python
            proxy = json.loads(j)

        return proxy
