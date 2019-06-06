import unittest
import mymodule, suma


class TestMyModule(unittest.TestCase):
    def test_sum(self):
        self.assertEqual(mymodule.sum(5, 7), 12)

    def test_suma(self):
        self.assertEqual(suma.suma(5 ,5), 10)


if __name__ == "__main__":
    unittest.main()