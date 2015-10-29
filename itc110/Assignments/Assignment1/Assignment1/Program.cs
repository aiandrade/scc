using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Assignment1A
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
            Console.WriteLine("Enter your address");
            //get input
            string address = Console.ReadLine();
            //prompt
            Console.WriteLine("Enter your city");
            //get input
            string city = Console.ReadLine();
            Console.WriteLine("Enter your state");
            //get input
            string state = Console.ReadLine();
            Console.WriteLine("Enter your zip");
            //get input
            string zip = Console.ReadLine();
            //output results
            Console.WriteLine("Your mailing address is:");
            Console.WriteLine("{0}", name);
            Console.WriteLine( address);
            Console.WriteLine("{0}, {1} {2}", city, state, zip);
            //pause long enough to read it
            Console.ReadKey();

           

        }
    }
}
