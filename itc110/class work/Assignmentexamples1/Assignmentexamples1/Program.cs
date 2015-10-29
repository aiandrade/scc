using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AssignmentExamples
{
    class Program
    {
        static void Main(string[] args)
        {
            //prompt
            Console.WriteLine("Enter your favorite color");
            //get input
            string colorChoice=Console.ReadLine();
            Console.WriteLine("Enter your favorite animal");
            //get input
            string animal = Console.ReadLine();
            //output results
            Console.WriteLine("Your favorite color is {0}, and your favorite animal is {1}", colorChoice, animal);
            //concatination, tying things together
            Console.WriteLine("Your favorite color is " + colorChoice + ", and your favorite animal is " + animal);
            //pause long enough to read it
            Console.ReadKey();
        }
    }
}
