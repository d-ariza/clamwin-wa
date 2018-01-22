# https://stackoverflow.com/questions/7621897/python-logging-module-globally
import logging

def setup_custom_logger(name):
    formatter = logging.Formatter(fmt='%(asctime)s - %(module)s - %(levelname)s - %(message)s')

    handler = logging.StreamHandler()
    handler.setFormatter(formatter)

    logger = logging.getLogger(name)
    logger.setLevel(logging.DEBUG)
    logger.addHandler(handler)
    return logger