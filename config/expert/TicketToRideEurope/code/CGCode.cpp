#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int train_cars;
    int num_tickets;
    int num_routes;
    cin >> train_cars >> num_tickets >> num_routes; cin.ignore();
    int red;
    int yellow;
    int green;
    int blue;
    int white;
    int black;
    int orange;
    int pink;
    int engine;
    cin >> red >> yellow >> green >> blue >> white >> black >> orange >> pink >> engine; cin.ignore();
    for (int i = 0; i < num_tickets; i++) {
        int points;
        string city_a;
        string city_b;
        cin >> points >> city_a >> city_b; cin.ignore();
    }
    for (int i = 0; i < num_routes; i++) {
        int length;
        int required_engines;
        string color;
        string city_a;
        string city_b;
        cin >> length >> required_engines >> color >> city_a >> city_b; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "points" << endl;
}