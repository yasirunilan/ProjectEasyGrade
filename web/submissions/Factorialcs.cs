using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
 
namespace factorial
{
    class Factorialcs
    {
        static void Main(string[] args)
        {
            int i, number, fact;
            //Console.WriteLine("Enter the Number");
            number = int.Parse(Console.ReadLine());
            fact = number;
            for (i = number - 1; i >= 1; i--)
            {
                fact = fact * i;
            }
            Console.WriteLine(fact);
            Console.ReadLine();
 
        }
    }
}