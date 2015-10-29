using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment1B
{
    class Program
    {
        static void Main(string[] args)
        {
            //prompt
            Console.WriteLine("Enter a favorite quote");
            //get input
            string quote = Console.ReadLine();
            //prompt
            Console.WriteLine("Enter a favorite quote");
            //get input
            string secondquote = Console.ReadLine();
            //output results
            Console.WriteLine("Your favorite quotes are '{0}', and '{1}'", quote, secondquote);

            //pause long enough to read it
            Console.ReadKey();
        }
    }
}
