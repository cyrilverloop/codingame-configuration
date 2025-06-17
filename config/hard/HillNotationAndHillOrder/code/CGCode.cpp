#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int num_compounds;
    cin >> num_compounds; cin.ignore();
    for (int i = 0; i < num_compounds; i++) {
        string compound;
        getline(cin, compound);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}