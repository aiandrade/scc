using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment1C
{
    class Program
    {
        static void Main(string[] args)
        {
            //prompt
            Console.WriteLine("Enter your name");
            //get input
            string name = Console.ReadLine();
            //prompt
            Console.WriteLine("Enter your age");
            //get input
            string age = Console.ReadLine();
            //prompt
            Console.WriteLine("Enter your favorite color");
            //get input
            string color = Console.ReadLine();
            //ouput
            Console.WriteLine("Your name is {0}, your age is {1}, and your favorite color is {2}.", name, age, color);

            Console.ReadLine();
        }
    }
}
