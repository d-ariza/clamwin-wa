import log

logger = log.setup_custom_logger('root')

import clamcli

def __main__():
    clamwincli = clamcli.ClamCli()
    proxy = clamwincli.GetProxy()

    if proxy is not None:
        logger.info("proxy['host']: " + proxy['host'])
        logger.info("proxy['port']: " + str(proxy['port']))
        logger.info("proxy['username']: " + proxy['username'])
        logger.info("proxy['password']: " + proxy['password'])

        clamwincli.SetProxy(proxy)

if __name__ == '__main__':
    __main__()
