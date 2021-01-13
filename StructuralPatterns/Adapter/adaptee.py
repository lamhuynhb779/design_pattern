"""
Convert the interface of a class into another interface clients expect.
Adapter lets classes work together that couldn't otherwise because of incompatible interfaces
"""
from abc import ABCMeta, abstractmethod


class Target(metaclass=ABCMeta):
    """
    Define the domain-specific interface that Client uses
    """

    def __init__(self):
        self._adaptee = Adaptee()

    @abstractmethod
    def request(self):
        pass


class Adapter(Target):
    """
    Adapt the interface of Adaptee to the Target interface
    """

    def request(self):
        self._adaptee.specific_request()


class Adaptee:
    """
    Define an existing interface that needs adapting
    """

    def specific_request(self):
        print("specific_request")


def main():
    adapter = Adapter()
    adapter.request()


if __name__ == "__main__":
    main()